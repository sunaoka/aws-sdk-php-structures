<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsWithInvalidEffectivePolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Account>|null $Accounts
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|null $PolicyType
 * @property string|null $NextToken
 */
class ListAccountsWithInvalidEffectivePolicyResponse extends Response
{
}
