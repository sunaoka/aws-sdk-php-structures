<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property list<string> $worlds
 * @property Shapes\OutputLocation $outputLocation
 * @property string $iamRole
 * @property array<string, string> $tags
 */
class CreateWorldExportJobRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     worlds: list<string>,
     *     outputLocation: Shapes\OutputLocation,
     *     iamRole: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
