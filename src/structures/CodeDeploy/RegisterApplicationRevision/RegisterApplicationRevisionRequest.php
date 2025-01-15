<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RegisterApplicationRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string|null $description
 * @property Shapes\RevisionLocation $revision
 */
class RegisterApplicationRevisionRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     description?: string|null,
     *     revision: Shapes\RevisionLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
