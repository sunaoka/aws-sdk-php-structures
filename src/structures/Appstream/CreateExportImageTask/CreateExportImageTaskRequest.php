<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateExportImageTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string $AmiName
 * @property string $IamRoleArn
 * @property array<string, string>|null $TagSpecifications
 * @property string|null $AmiDescription
 */
class CreateExportImageTaskRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     AmiName: string,
     *     IamRoleArn: string,
     *     TagSpecifications?: array<string, string>|null,
     *     AmiDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
