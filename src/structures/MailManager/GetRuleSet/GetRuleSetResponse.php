<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property string $RuleSetArn
 * @property string $RuleSetId
 * @property string $RuleSetName
 * @property list<Shapes\Rule> $Rules
 */
class GetRuleSetResponse extends Response
{
}
