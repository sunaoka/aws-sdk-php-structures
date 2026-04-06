<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999>|null $CurrentApplicationVersionId
 * @property Shapes\ApplicationConfigurationUpdate|null $ApplicationConfigurationUpdate
 * @property string|null $ServiceExecutionRoleUpdate
 * @property Shapes\RunConfigurationUpdate|null $RunConfigurationUpdate
 * @property list<Shapes\CloudWatchLoggingOptionUpdate>|null $CloudWatchLoggingOptionUpdates
 * @property string|null $ConditionalToken
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>|null,
     *     ApplicationConfigurationUpdate?: Shapes\ApplicationConfigurationUpdate|null,
     *     ServiceExecutionRoleUpdate?: string|null,
     *     RunConfigurationUpdate?: Shapes\RunConfigurationUpdate|null,
     *     CloudWatchLoggingOptionUpdates?: list<Shapes\CloudWatchLoggingOptionUpdate>|null,
     *     ConditionalToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
