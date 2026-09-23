<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetScope;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scopeId
 * @property string $scopeArn
 * @property string $scopeName
 * @property string|null $scopeDescription
 * @property Shapes\ScopeConfiguration|null $scopeConfiguration
 * @property 'DRAFT'|'ACTIVE'|'DISABLED' $status
 * @property string $version
 * @property string|null $updateToken
 * @property bool|null $isSnapshot
 * @property bool|null $hasPublishedVersion
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetScopeResponse extends Response
{
}
