<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $customerEncryptionKeyArn
 * @property string|null $defaultVariant
 * @property string|null $description
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\PromptVariant>|null $variants
 * @property string $version
 */
class CreatePromptResponse extends Response
{
}
