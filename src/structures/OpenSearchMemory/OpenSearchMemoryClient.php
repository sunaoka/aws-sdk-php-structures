<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory;

class OpenSearchMemoryClient extends \Aws\OpenSearchMemory\OpenSearchMemoryClient
{
    use BatchGetEvent\BatchGetEventTrait;
    use CreateEvent\CreateEventTrait;
    use CreateMemory\CreateMemoryTrait;
    use CreateSpace\CreateSpaceTrait;
    use DeleteEvent\DeleteEventTrait;
    use DeleteMemory\DeleteMemoryTrait;
    use DeleteSpace\DeleteSpaceTrait;
    use GetEvent\GetEventTrait;
    use GetMemory\GetMemoryTrait;
    use GetSpace\GetSpaceTrait;
    use ListEvents\ListEventsTrait;
    use ListMemories\ListMemoriesTrait;
    use ListSpaces\ListSpacesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SearchEvents\SearchEventsTrait;
    use SearchMemories\SearchMemoriesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMemory\UpdateMemoryTrait;
    use UpdateSpace\UpdateSpaceTrait;
}
