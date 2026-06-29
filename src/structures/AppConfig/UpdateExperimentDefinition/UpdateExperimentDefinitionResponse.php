<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Hypothesis
 * @property 'ACTIVE'|'IDLE'|'ARCHIVED'|null $Status
 * @property string|null $ConfigurationProfileId
 * @property string|null $EnvironmentId
 * @property string|null $FlagKey
 * @property string|null $AudienceRule
 * @property string|null $AudienceDescription
 * @property string|null $LaunchCriteria
 * @property list<Shapes\Treatment>|null $Treatments
 * @property Shapes\Treatment|null $Control
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $KmsKeyIdentifier
 */
class UpdateExperimentDefinitionResponse extends Response
{
}
