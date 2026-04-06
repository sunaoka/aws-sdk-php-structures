<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RuleSetId
 * @property string $RuleSetArn
 * @property string $RuleSetName
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property list<Shapes\Rule> $Rules
 */
class GetRuleSetResponse extends Response
{
}
