<?php

namespace Sunaoka\Aws\Structures\Iam\AcquireRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property int|null $TemplateMinorVersion
 * @property array<string, Shapes\ReplacementValueEntry>|null $ReplacementValues
 */
class AcquireRoleRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     TemplateMinorVersion?: int|null,
     *     ReplacementValues?: array<string, Shapes\ReplacementValueEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
