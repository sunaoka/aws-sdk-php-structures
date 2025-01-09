<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $Description
 * @property string $ClientToken
 * @property Shapes\OutputConfig $OutputConfig
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     Description?: string,
     *     ClientToken?: string,
     *     OutputConfig: Shapes\OutputConfig,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
