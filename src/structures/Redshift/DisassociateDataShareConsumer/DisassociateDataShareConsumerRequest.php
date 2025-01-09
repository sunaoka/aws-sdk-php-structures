<?php

namespace Sunaoka\Aws\Structures\Redshift\DisassociateDataShareConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 * @property bool $DisassociateEntireAccount
 * @property string $ConsumerArn
 * @property string $ConsumerRegion
 */
class DisassociateDataShareConsumerRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn: string,
     *     DisassociateEntireAccount?: bool,
     *     ConsumerArn?: string,
     *     ConsumerRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
