<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunctionRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $functionArn
 * @property string $revisionArn
 * @property string $revisionId
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property Shapes\BuildConfig $buildConfig
 * @property Shapes\ServiceConfig $serviceConfig
 * @property 'Pending'|'Active'|'Failed' $state
 * @property string $stateReason
 * @property list<Shapes\RevisionError>|null $errors
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateWebFunctionRevisionResponse extends Response
{
}
