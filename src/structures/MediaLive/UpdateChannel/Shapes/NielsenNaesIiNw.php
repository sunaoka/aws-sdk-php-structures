<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CheckDigitString
 * @property double $Sid
 * @property 'AMERICA_PUERTO_RICO'|'US_ALASKA'|'US_ARIZONA'|'US_CENTRAL'|'US_EASTERN'|'US_HAWAII'|'US_MOUNTAIN'|'US_PACIFIC'|'US_SAMOA'|'UTC'|null $Timezone
 */
class NielsenNaesIiNw extends Shape
{
    /**
     * @param array{
     *     CheckDigitString: string,
     *     Sid: double,
     *     Timezone?: 'AMERICA_PUERTO_RICO'|'US_ALASKA'|'US_ARIZONA'|'US_CENTRAL'|'US_EASTERN'|'US_HAWAII'|'US_MOUNTAIN'|'US_PACIFIC'|'US_SAMOA'|'UTC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
