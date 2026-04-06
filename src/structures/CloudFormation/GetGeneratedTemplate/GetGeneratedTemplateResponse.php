<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetGeneratedTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATE_PENDING'|'UPDATE_PENDING'|'DELETE_PENDING'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'COMPLETE'|null $Status
 * @property string|null $TemplateBody
 */
class GetGeneratedTemplateResponse extends Response
{
}
