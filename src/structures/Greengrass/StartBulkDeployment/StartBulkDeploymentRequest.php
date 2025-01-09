<?php

namespace Sunaoka\Aws\Structures\Greengrass\StartBulkDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $ExecutionRoleArn
 * @property string $InputFileUri
 * @property array<string, string> $tags
 */
class StartBulkDeploymentRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     ExecutionRoleArn: string,
     *     InputFileUri: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
