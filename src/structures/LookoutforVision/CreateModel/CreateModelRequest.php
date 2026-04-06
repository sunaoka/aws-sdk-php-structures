<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property Shapes\OutputConfig $OutputConfig
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     OutputConfig: Shapes\OutputConfig,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
