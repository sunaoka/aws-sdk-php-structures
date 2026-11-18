<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property Shapes\FunctionTarget $target
 * @property string $requestExpression
 * @property string|null $responseExpression
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $eventBridgeDelivery
 * @property string $arn
 * @property string $id
 * @property 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED' $status
 * @property list<string>|null $references
 * @property list<'FRAMES'|'SUBTITLES'|'CONTEXTUAL_METADATA'|'CLIP_METADATA'>|null $contextTypes
 * @property array<string, string>|null $tags
 */
class UpdateFunctionResponse extends Response
{
}
