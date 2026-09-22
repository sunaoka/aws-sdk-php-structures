<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $domainId
 * @property string $dataAccessRoleArn
 * @property string|null $agentCoreEvaluationRoleArn
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     domainId: string,
     *     dataAccessRoleArn: string,
     *     agentCoreEvaluationRoleArn?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
