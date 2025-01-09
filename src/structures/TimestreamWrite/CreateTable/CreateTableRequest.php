<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\RetentionProperties $RetentionProperties
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\MagneticStoreWriteProperties $MagneticStoreWriteProperties
 * @property Shapes\Schema $Schema
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     RetentionProperties?: Shapes\RetentionProperties,
     *     Tags?: list<Shapes\Tag>,
     *     MagneticStoreWriteProperties?: Shapes\MagneticStoreWriteProperties,
     *     Schema?: Shapes\Schema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
