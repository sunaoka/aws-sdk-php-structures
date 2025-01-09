<?php

namespace Sunaoka\Aws\Structures\Redshift\AssociateDataShareConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 * @property bool $AssociateEntireAccount
 * @property string $ConsumerArn
 * @property string $ConsumerRegion
 * @property bool $AllowWrites
 */
class AssociateDataShareConsumerRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn: string,
     *     AssociateEntireAccount?: bool,
     *     ConsumerArn?: string,
     *     ConsumerRegion?: string,
     *     AllowWrites?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
