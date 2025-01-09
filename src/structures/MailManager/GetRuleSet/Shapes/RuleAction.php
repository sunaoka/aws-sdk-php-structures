<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddHeaderAction $AddHeader
 * @property ArchiveAction $Archive
 * @property DeliverToMailboxAction $DeliverToMailbox
 * @property DeliverToQBusinessAction $DeliverToQBusiness
 * @property DropAction $Drop
 * @property RelayAction $Relay
 * @property ReplaceRecipientAction $ReplaceRecipient
 * @property SendAction $Send
 * @property S3Action $WriteToS3
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     AddHeader?: AddHeaderAction,
     *     Archive?: ArchiveAction,
     *     DeliverToMailbox?: DeliverToMailboxAction,
     *     DeliverToQBusiness?: DeliverToQBusinessAction,
     *     Drop?: DropAction,
     *     Relay?: RelayAction,
     *     ReplaceRecipient?: ReplaceRecipientAction,
     *     Send?: SendAction,
     *     WriteToS3?: S3Action
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
