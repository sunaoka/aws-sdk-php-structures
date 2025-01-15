<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolutionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string $solutionArn
 * @property 'FULL'|'UPDATE'|'AUTOTRAIN'|null $trainingMode
 * @property list<Shapes\Tag>|null $tags
 */
class CreateSolutionVersionRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     solutionArn: string,
     *     trainingMode?: 'FULL'|'UPDATE'|'AUTOTRAIN'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
