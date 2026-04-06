<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\AssociateSourceToS3TableIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationArn
 * @property Shapes\DataSource $dataSource
 */
class AssociateSourceToS3TableIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationArn: string,
     *     dataSource: Shapes\DataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
