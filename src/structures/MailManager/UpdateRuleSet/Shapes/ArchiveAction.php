<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP' $ActionFailurePolicy
 * @property string $TargetArchive
 */
class ArchiveAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP',
     *     TargetArchive: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
