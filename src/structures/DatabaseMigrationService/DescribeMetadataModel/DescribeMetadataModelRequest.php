<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SelectionRules
 * @property string $MigrationProjectIdentifier
 * @property 'SOURCE'|'TARGET' $Origin
 */
class DescribeMetadataModelRequest extends Request
{
    /**
     * @param array{
     *     SelectionRules: string,
     *     MigrationProjectIdentifier: string,
     *     Origin: 'SOURCE'|'TARGET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
