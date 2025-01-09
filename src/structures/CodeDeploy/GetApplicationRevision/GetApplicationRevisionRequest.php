<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetApplicationRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property Shapes\RevisionLocation $revision
 */
class GetApplicationRevisionRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     revision: Shapes\RevisionLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
