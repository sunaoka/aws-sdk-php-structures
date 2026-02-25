<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $id
 * @property list<string> $dataEndpoints
 * @property list<Shapes\GetOutput> $outputs
 * @property 'CREATING'|'AVAILABLE'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'ARCHIVED' $status
 * @property Shapes\FeedAssociation|null $association
 * @property array<string, string>|null $tags
 */
class CreateFeedResponse extends Response
{
}
