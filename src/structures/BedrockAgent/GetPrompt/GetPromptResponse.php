<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetPrompt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $defaultVariant
 * @property list<Shapes\PromptVariant>|null $variants
 * @property string $id
 * @property string $arn
 * @property string $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetPromptResponse extends Response
{
}
