<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationArn
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING' $status
 * @property string|null $authorizationUrl
 */
class CreateCodeSecurityIntegrationResponse extends Response
{
}
