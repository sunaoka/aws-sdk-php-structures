<?php

namespace Sunaoka\Aws\Structures\Redshift\DisassociateDataShareConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 * @property bool|null $DisassociateEntireAccount
 * @property string|null $ConsumerArn
 * @property string|null $ConsumerRegion
 */
class DisassociateDataShareConsumerRequest extends Request
{
    /**
     * @param array{
     *     DataShareArn: string,
     *     DisassociateEntireAccount?: bool|null,
     *     ConsumerArn?: string|null,
     *     ConsumerRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
