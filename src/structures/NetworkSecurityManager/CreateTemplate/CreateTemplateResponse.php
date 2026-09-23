<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $templateId
 * @property string $templateArn
 * @property string $templateName
 * @property string|null $templateDescription
 * @property 'DRAFT'|'ACTIVE'|'DISABLED' $status
 * @property string $version
 * @property list<Shapes\AssociatedRule> $associatedRuleList
 * @property string|null $updateToken
 * @property bool|null $isSnapshot
 * @property bool|null $hasPublishedVersion
 * @property 'WAF' $firewallType
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateTemplateResponse extends Response
{
}
