<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\RetentionProperties|null $RetentionProperties
 * @property Shapes\MagneticStoreWriteProperties|null $MagneticStoreWriteProperties
 * @property Shapes\Schema|null $Schema
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     RetentionProperties?: Shapes\RetentionProperties|null,
     *     MagneticStoreWriteProperties?: Shapes\MagneticStoreWriteProperties|null,
     *     Schema?: Shapes\Schema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
