<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Gid
 * @property list<string>|null $SecondaryGids
 * @property string|null $Uid
 */
class AwsEfsAccessPointPosixUserDetails extends Shape
{
    /**
     * @param array{
     *     Gid?: string|null,
     *     SecondaryGids?: list<string>|null,
     *     Uid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
