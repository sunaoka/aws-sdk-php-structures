<?php

namespace Sunaoka\Aws\Structures\Greengrass\StartBulkDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $ExecutionRoleArn
 * @property string $InputFileUri
 * @property array<string, string>|null $tags
 */
class StartBulkDeploymentRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     ExecutionRoleArn: string,
     *     InputFileUri: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
