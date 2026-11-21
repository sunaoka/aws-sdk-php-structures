<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreatePublisher;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Identifier $value
 * @property 'DOMAIN'|null $identifierType
 * @property 'ACTION_REQUIRED'|'ACTIVE'|'FAILED'|'SUSPENDED'|'DELETING' $status
 * @property string|null $statusReason
 * @property Shapes\DomainChallenge|null $domainChallenge
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $publisherArn
 */
class CreatePublisherResponse extends Response
{
}
