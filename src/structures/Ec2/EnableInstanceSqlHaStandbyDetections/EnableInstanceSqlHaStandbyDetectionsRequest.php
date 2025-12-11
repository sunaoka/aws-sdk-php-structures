<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableInstanceSqlHaStandbyDetections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string|null $SqlServerCredentials
 * @property bool|null $DryRun
 */
class EnableInstanceSqlHaStandbyDetectionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     SqlServerCredentials?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
