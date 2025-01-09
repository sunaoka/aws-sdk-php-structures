<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Evaluation> $Evaluations
 * @property string $ResultToken
 * @property bool $TestMode
 */
class PutEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     Evaluations?: list<Shapes\Evaluation>,
     *     ResultToken: string,
     *     TestMode?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
