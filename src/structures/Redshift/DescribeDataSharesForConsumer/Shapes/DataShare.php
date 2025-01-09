<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForConsumer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataShareArn
 * @property string $ProducerArn
 * @property bool $AllowPubliclyAccessibleConsumers
 * @property list<DataShareAssociation> $DataShareAssociations
 * @property string $ManagedBy
 * @property 'INTERNAL' $DataShareType
 */
class DataShare extends Shape
{
    /**
     * @param array{
     *     DataShareArn?: string,
     *     ProducerArn?: string,
     *     AllowPubliclyAccessibleConsumers?: bool,
     *     DataShareAssociations?: list<DataShareAssociation>,
     *     ManagedBy?: string,
     *     DataShareType?: 'INTERNAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
