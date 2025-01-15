<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\RetentionProperties|null $RetentionProperties
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\MagneticStoreWriteProperties|null $MagneticStoreWriteProperties
 * @property Shapes\Schema|null $Schema
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     RetentionProperties?: Shapes\RetentionProperties|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     MagneticStoreWriteProperties?: Shapes\MagneticStoreWriteProperties|null,
     *     Schema?: Shapes\Schema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
