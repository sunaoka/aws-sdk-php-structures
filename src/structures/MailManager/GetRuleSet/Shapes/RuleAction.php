<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DropAction|null $Drop
 * @property RelayAction|null $Relay
 * @property ArchiveAction|null $Archive
 * @property S3Action|null $WriteToS3
 * @property SendAction|null $Send
 * @property AddHeaderAction|null $AddHeader
 * @property ReplaceRecipientAction|null $ReplaceRecipient
 * @property DeliverToMailboxAction|null $DeliverToMailbox
 * @property DeliverToQBusinessAction|null $DeliverToQBusiness
 * @property SnsAction|null $PublishToSns
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     Drop?: DropAction|null,
     *     Relay?: RelayAction|null,
     *     Archive?: ArchiveAction|null,
     *     WriteToS3?: S3Action|null,
     *     Send?: SendAction|null,
     *     AddHeader?: AddHeaderAction|null,
     *     ReplaceRecipient?: ReplaceRecipientAction|null,
     *     DeliverToMailbox?: DeliverToMailboxAction|null,
     *     DeliverToQBusiness?: DeliverToQBusinessAction|null,
     *     PublishToSns?: SnsAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
