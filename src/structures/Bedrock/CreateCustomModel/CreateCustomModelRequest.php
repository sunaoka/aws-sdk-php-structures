<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateCustomModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelName
 * @property Shapes\ModelDataSource $modelSourceConfig
 * @property string|null $modelKmsKeyArn
 * @property string|null $roleArn
 * @property list<Shapes\Tag>|null $modelTags
 * @property string|null $clientRequestToken
 */
class CreateCustomModelRequest extends Request
{
    /**
     * @param array{
     *     modelName: string,
     *     modelSourceConfig: Shapes\ModelDataSource,
     *     modelKmsKeyArn?: string|null,
     *     roleArn?: string|null,
     *     modelTags?: list<Shapes\Tag>|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
