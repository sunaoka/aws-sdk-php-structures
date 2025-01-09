<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property int<1, max> $VersionNumber
 */
class DeleteTemplateRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     VersionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
