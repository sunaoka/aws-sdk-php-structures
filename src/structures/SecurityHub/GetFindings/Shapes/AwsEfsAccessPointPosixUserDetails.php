<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Gid
 * @property list<string> $SecondaryGids
 * @property string $Uid
 */
class AwsEfsAccessPointPosixUserDetails extends Shape
{
    /**
     * @param array{
     *     Gid?: string,
     *     SecondaryGids?: list<string>,
     *     Uid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
