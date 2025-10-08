<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateCustomModelDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelDeploymentName
 * @property string $modelArn
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientRequestToken
 */
class CreateCustomModelDeploymentRequest extends Request
{
    /**
     * @param array{
     *     modelDeploymentName: string,
     *     modelArn: string,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
