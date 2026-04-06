<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\DeleteDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETED'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_COMPLETED'|'UPDATE_ROLLBACK_FAILED'|null $status
 * @property string|null $statusReason
 */
class DeleteDeploymentResponse extends Response
{
}
