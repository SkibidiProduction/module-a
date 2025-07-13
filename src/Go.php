<?php

declare(strict_types=1);

namespace Boneskhv\Mod;

use Carbon\Carbon;

class Go
{
   public static function run()
   {
      return Carbon::now();
   }
}
