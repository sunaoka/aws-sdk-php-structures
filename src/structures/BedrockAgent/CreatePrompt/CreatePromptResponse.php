<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $customerEncryptionKeyArn
 * @property string $defaultVariant
 * @property string $description
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\PromptVariant> $variants
 * @property string $version
 */
class CreatePromptResponse extends Response
{
}
