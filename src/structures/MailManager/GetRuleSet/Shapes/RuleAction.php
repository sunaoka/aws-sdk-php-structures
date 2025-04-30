<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddHeaderAction|null $AddHeader
 * @property ArchiveAction|null $Archive
 * @property DeliverToMailboxAction|null $DeliverToMailbox
 * @property DeliverToQBusinessAction|null $DeliverToQBusiness
 * @property DropAction|null $Drop
 * @property SnsAction|null $PublishToSns
 * @property RelayAction|null $Relay
 * @property ReplaceRecipientAction|null $ReplaceRecipient
 * @property SendAction|null $Send
 * @property S3Action|null $WriteToS3
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     AddHeader?: AddHeaderAction|null,
     *     Archive?: ArchiveAction|null,
     *     DeliverToMailbox?: DeliverToMailboxAction|null,
     *     DeliverToQBusiness?: DeliverToQBusinessAction|null,
     *     Drop?: DropAction|null,
     *     PublishToSns?: SnsAction|null,
     *     Relay?: RelayAction|null,
     *     ReplaceRecipient?: ReplaceRecipientAction|null,
     *     Send?: SendAction|null,
     *     WriteToS3?: S3Action|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
