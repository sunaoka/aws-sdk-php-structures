<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $ActiveDirectoryId
 * @property string|null $ResourceARN
 */
class ActiveDirectoryBackupAttributes extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     ActiveDirectoryId?: string|null,
     *     ResourceARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
