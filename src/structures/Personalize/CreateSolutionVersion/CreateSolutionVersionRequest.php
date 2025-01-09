<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolutionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $solutionArn
 * @property 'FULL'|'UPDATE'|'AUTOTRAIN' $trainingMode
 * @property list<Shapes\Tag> $tags
 */
class CreateSolutionVersionRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     solutionArn: string,
     *     trainingMode?: 'FULL'|'UPDATE'|'AUTOTRAIN',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
