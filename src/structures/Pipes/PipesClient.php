<?php

namespace Sunaoka\Aws\Structures\Pipes;

class PipesClient extends \Aws\Pipes\PipesClient
{
    use CreatePipe\CreatePipeTrait;
    use DeletePipe\DeletePipeTrait;
    use DescribePipe\DescribePipeTrait;
    use ListPipes\ListPipesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartPipe\StartPipeTrait;
    use StopPipe\StopPipeTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePipe\UpdatePipeTrait;
}
