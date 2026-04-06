<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlternateMedia>|null $AlternateMedia
 * @property string|null $Audience
 */
class AudienceMedia extends Shape
{
    /**
     * @param array{
     *     AlternateMedia?: list<AlternateMedia>|null,
     *     Audience?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
