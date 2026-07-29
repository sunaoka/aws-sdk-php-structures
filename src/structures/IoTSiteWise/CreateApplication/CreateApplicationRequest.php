<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $idcInstanceArn
 * @property string $workspaceName
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     idcInstanceArn: string,
     *     workspaceName: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
