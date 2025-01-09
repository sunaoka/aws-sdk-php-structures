<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\RetentionProperties $RetentionProperties
 * @property Shapes\MagneticStoreWriteProperties $MagneticStoreWriteProperties
 * @property Shapes\Schema $Schema
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     RetentionProperties?: Shapes\RetentionProperties,
     *     MagneticStoreWriteProperties?: Shapes\MagneticStoreWriteProperties,
     *     Schema?: Shapes\Schema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
