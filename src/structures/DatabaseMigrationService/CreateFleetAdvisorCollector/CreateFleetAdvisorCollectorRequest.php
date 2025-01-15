<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateFleetAdvisorCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectorName
 * @property string|null $Description
 * @property string $ServiceAccessRoleArn
 * @property string $S3BucketName
 */
class CreateFleetAdvisorCollectorRequest extends Request
{
    /**
     * @param array{
     *     CollectorName: string,
     *     Description?: string|null,
     *     ServiceAccessRoleArn: string,
     *     S3BucketName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
