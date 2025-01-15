<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property string $TargetArchive
 */
class ArchiveAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     TargetArchive: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
