<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListOutpostsWithS3;

trait ListOutpostsWithS3Trait
{
    /**
     * @param ListOutpostsWithS3Request $args
     * @return ListOutpostsWithS3Response
     */
    public function listOutpostsWithS3(ListOutpostsWithS3Request $args)
    {
        $result = parent::listOutpostsWithS3($args->toArray());
        return new ListOutpostsWithS3Response($result->toArray());
    }
}
