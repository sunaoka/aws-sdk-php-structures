<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $ActiveDirectoryId
 * @property string $ResourceARN
 */
class ActiveDirectoryBackupAttributes extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     ActiveDirectoryId?: string,
     *     ResourceARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
