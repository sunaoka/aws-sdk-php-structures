<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerGid
 * @property string $OwnerUid
 * @property string $Permissions
 */
class AwsEfsAccessPointRootDirectoryCreationInfoDetails extends Shape
{
    /**
     * @param array{
     *     OwnerGid?: string,
     *     OwnerUid?: string,
     *     Permissions?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
